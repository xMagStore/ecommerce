**# Whitepaper & Vision**

# **For xMag**

Phone: +61420520204

Email: joe.wu@xmag.store

Phone

Email


_Version: 1.20231019_

_Updated: 2023/10/19_

**[1.](#_Toc148518081)****DOCUMENT VERSIONS 3**

**[2.](#_Toc148518082)****PREFACE 4**

[**2.1**** Document Purpose** 4](#_Toc148518083)

[**2.2**** Scope** 4](#_Toc148518084)

[**2.3**** Definitions** 4](#_Toc148518085)

[**2.4**** Assumptions** 5](#_Toc148518086)

**[3.](#_Toc148518087)****PROJECT CONTEXT 6**

[**3.1**** The Problem** 6](#_Toc148518088)

[**3.2**** Proposed Solution** 6](#_Toc148518089)

[**3.3**** The Transition** 7](#_Toc148518090)

[**3.4**** Purpose and Characteristics** 7](#_Toc148518091)

**[4.](#_Toc148518092)****DESIGN OVERVIEW 8**

[**4.1**** The Phased Approach** 8](#_Toc148518093)

[**4.2**** MultiversX – Initial Integration Focus** 11](#_Toc148518094)

[**4.3**** Gamification and Loyalty Structure Overview** 12](#_Toc148518095)

**[5.](#_Toc148518096)****BUSINESS INTRICACIES 13**

[**5.1**** Fees / Commission Strategy** 13](#_Toc148518097)

[**5.2**** Payment Methods and Payment Gateways** 13](#_Toc148518098)

[**5.3**** Unsupported Countries** 14](#_Toc148518099)

**[6.](#_Toc148518100)****DETAILED TECHNICAL DESIGN 15**

[**6.1**** Technology Architecture** 15](#_Toc148518101)

[**6.2**** Payments** 16](#_Toc148518102)

[**6.3**** Alerts and Notifications** 17](#_Toc148518103)

[**6.4**** Error Reporting** 18](#_Toc148518104)

[**6.5**** Performance** 19](#_Toc148518105)

[**6.6**** Approval Process for Vendors** 20](#_Toc148518106)

[**6.7**** Security** 21](#_Toc148518107)

[**6.8**** In-Platform Currency (Codename $XMGC)** 22](#_Toc148518108)

[**6.9**** Loyalty Gamification and Status** 23](#_Toc148518109)

**[7.](#_Toc148518110)****COMPLIANCE AND RISKS 26**

[**7.1**** Jurisdictions** 26](#_Toc148518111)

[**7.2**** Compromised Wallets** 26](#_Toc148518112)

[**7.3**** Legal Action** 26](#_Toc148518113)

**[8.](#_Toc148518114)****FUTURE SCOPE 27**

[**8.1**** NFT / SFT Sales and Marketplace** 27](#_Toc148518115)

[**8.2**** Gateway of Tokenization for Everyone** 27](#_Toc148518116)

[**8.3**** Web3 KYB Integrations** 27](#_Toc148518117)

[**8.4**** ESG Scores Integration for Vendors** 28](#_Toc148518118)

[**8.5**** Dedicated iOS and Android App** 28](#_Toc148518119)

1.
### DOCUMENT VERSIONS

| **Version** | **Date** | **Operation** | **Notes / Changes** |
| --- | --- | --- | --- |
| **1.20231010** | 10th October 2023 | Creation | Document Creation |

###


1.
### PREFACE

  1.
###
#### **Document Purpose**

The purpose of this document is to give a structured business overview as well as detailed design into both business intricacies as well as technical architecture in the form of a Whitepaper. Although this document is designed to cover as much ground as possible as an important document for the underlying business, some of the components may warrant its own micro-strategy especially as the business grows, due to the complexity of the strategies at hand.

When micro-strategy documents need to be broken off from this main document, a reference / link will be made to the relevant document, its name, and its location.

###

  1.
###
#### **Scope**

This document covers all the over-arching business and technical intricacies for xMag.

  1.
###
#### **Definitions**

Some of the acronyms and specialist phrases are mentioned below for clarity.

- **NFT** : Non-fungible Token
- **KYB** : Know Your Business
- **KYC** : Know Your Customer
- **Web3** : The greater decentralized economy that involves technologies which may include but are not limited to Blockchain and Cryptocurrencies.
- **dApp** : Distributed app that resides on the Blockchain
- **MVP** : Minimum Viable Product
- **DEFI** : Decentralized Finance
- **Exchange** : Where cryptocurrencies can be swapped or traded for one another, including selling for or buying with fiat currencies and stablecoins
- **ESDT** : Elrond Standard Digital Token
- **On-Chain** : Data that resides on the blockchain

  1.
###
#### **Assumptions**

The following assumptions are made during the creation and formulation of this document.

- Architectural improvements are on-going and although MultiversX has been chosen as the primary focus for the enablement and integration of xMag, the future will be a chain-agnostic world and xMag will be part of this evolution.
- The transition of an e-commerce shop from Web2 to Web3 will not be immediate. xMag will facilitate and ensure this transition is smooth and phased.

1.
### PROJECT CONTEXT

  1.
###
#### **The Problem**

E-commerce around the world is established and relatively mature. The likes of Amazon, eBay and Taobao dominate the e-commerce space in slightly differing forms of sell and location. However, as the _transition_ from Web2 to Web3 begin, there is no clear signs of any of these giants leading the charge to cement what the next Web3 e-commerce world will look like.

Although Web3 is still in its relative infancy, it is time to make an impact and define the future of how business and consumers interact in a decentralized digital world.

###

  1.
###
#### **Proposed Solution**

xMag was founded on the basis and vision of making an impactful change on how consumers can shop online. The acceptance of Cryptocurrencies as a payment in the mainstream is still far from reality. However, this should not stop us from giving the power of choice to the consumers.

The initial phase of xMag is to foster wider adoption of Cryptocurrencies as a form of payment, by enabling consumers to buy both small and big-ticket items with a wide range of supported coins and tokens. Simply put, anything listed for sale on xMag from any approved vendor can be bought with one of many supported Cryptocurrencies.

Aside from the support of Cryptocurrencies as a form of payment, xMag will also bridge the gap between Web2 and Web3 e-commerce by deriving heavily integrated Web3 components such as wallet association, wallet connect, decentralization and tokenization mechanisms into its core platform foundation.

In short, _ **xMag thrives to be the Web3 E-Commerce Everything Shop.** _

  1.
###
#### **The Transition**

It takes courage and vision to step into unchartered territory. Web3 e-commerce is very much unexplored, and as such, presents both huge opportunities as well as a level of risk.

To capitalize on the opportunities ahead whilst deploying sensible risk mitigation, xMag will deploy a three-phase transition to maturity:

- **Phase One** : The MVP
- **Phase Two** : The Hybrid
- **Phase Three** : The Future

These three phases will be outlined in detail in later sections of the document.

  1.
###
#### **Purpose and Characteristics**

xMag aims to give the power of choice to everyday consumers, thereby promoting decentralization and sovereignty. For the vendors, tapping into the Web3 audience and future generations has never been more straight-forward, by leveraging the powerful platform functionalities of xMag.

But this is the only initial steps of xMag. What would a totally Web3 e-commerce would look like in the future? Regardless of what it looks like, xMag aims to play a part in reshaping this future. And we believe, it starts with tight-knit integrations between Web2 and Web3, which is xMag's core focus from inception.

1.
### DESIGN OVERVIEW

  1.
###
#### **The Phased Approach**

The below is the proposed 3-step phase to navigate the unchartered territory of the Web3 space. This approach ensures xMag pushes forward with innovation and exploration, whilst responsibly mitigate associated risks.

    1.
#### Phase One – The MVP (v1)

The MVP version of xMag is to be presented at the MultiversX Hackathon 2023. It represents the very first fully functioning version of the xMag platform. The focal point of the MVP is to enable onboarding, showcasing the powerful capabilities of the first step of xMag's vision, and serves as a proof of concept for further development and architectural refinement. The proposed timeframe for staying on the MVP is relatively short, likely only a few months.

The high-level diagram of the proposed architecture and components are as below:

![](RackMultipart20231019-1-qndkkt_html_e8001c163724e8cf.png)

###


    1.
#### Phase TWO – The HYBRID (v2)

The Hybrid version of xMag represents our vision of an interconnected platform between Web2 and Web3. Whilst v2 may still be primarily based on the existing Web2 foundations, it is important to note that this version will be very different from v1 in the sense that there will be heavy interweaving integrations between Web2 and Web3 components.

The early high-level diagram proposed is as below. Please note that this is likely to evolve with time.

![](RackMultipart20231019-1-qndkkt_html_c3d1c8a72533e309.png)

    1.
#### Phase THREE – Web3-First E-Commerce (v3)

The final proposed version of xMag is its evolution into a Web3-First E-Commerce Platform. This will need a lot of time to design, think and architect as we also need to ensure that such design is both feasible and practical.

Decentralization and immutability costs efficiency, and with such a high burden and risk, the benefits that Web3-first brings _must_ be proportionate and justified. Timing is also pivotal to the success of such architecture, as building such architecture too early or too late will all but ensure its demise.

It is much too early to visualize what this high-level architecture will look like. As the Web3 technology matures, this document will be updated to give a vision on xMag v3.

###

  1.
###
#### **MultiversX – Initial Integration Focus**

Although the goal of xMag is to be chain-agnostic, a starting point is critical to its long-term success and sustainability. As the founders involved are already well-versed with the technology, community, and developer networks of MultiversX, it is unanimously decided that MultiversX will be the place for xMag's inception in terms of its MVP as well as establishing its own business sustainability, growth, and iterative improvements.

Multi-chain is the end goal and later in the document this vision will be outlined clearly to ensure this objective is not overlooked.

  1.
###
#### **Gamification and Loyalty Structure Overview**

Customary to Web3, gamification and loyalty structures go hand-in-hand with the strength of the community and user-base. Below is a high-level overview of future implementations of such mechanisms and structures.

| **Structure** | **Description** |
| --- | --- |
| **[In-Platform](#_In-Platform_Currency_(Codename)[Currency](#_In-Platform_Currency_(Codename)** | The acceptance of Cryptocurrencies and the flexibility of different forms of payment is at the core of xMag. An in-platform cryptocurrency to facilitate payments in a super-efficient and dynamic way with added benefits such as exclusive discounting mechanisms or rebates ensures it is advantageous to be paying or earning with the platform currency. |
| **[Customer SFT](#_Customer_Loyalty_Status)[Loyalty](#_Customer_Loyalty_Status)[Status](#_Customer_Loyalty_Status)** | Much like airline loyalty programs, a Web3-first loyalty program can be enticing, fun and motivating. Achieving a status ensures there's always a goal for the customer to thrive towards. Benefits can be manifold based on the level or status achieved. |
| **[Vendor](#_Partnership_and_Cashback)[SFT](#_Vendor_Loyalty_Status)[Loyalty](#_Vendor_Loyalty_Status)[Status](#_Vendor_Loyalty_Status)** | Vendors, much like customers, should also be rewarded for their loyalty. Although separate from the customer loyalty program, the vendor loyalty program runs in parallel to motivate sellers to sell and list more on the platform. There can also be mechanisms to reward vendors that sell xMag exclusive products or services. |

1.
### BUSINESS INTRICACIES

  1.
###
#### **Fees / Commission Strategy**

The fees / commission strategy is kept relatively simple and straightforward. There will be a **5%** fee / commission on **all transactions** that are completed on the platform.

**These fees are non-refundable. They are kept as a flat rate throughout the platform irrespective of vendor or volume.**

There may however be opportunities for vendors to earn valuable [rebate incentives](#_Vendor_Loyalty_Status) on the fees, through the in-platform currency. These will be proposed in detail later in this document.

  1.
###
#### **Payment Methods and Payment Gateways**

The following payment gateways are utilized (these will evolve over time and will be updated accordingly):

1. **Stripe** – this is the primary payment gateway and will enable card payment as well as all other common payment methods such as Alipay, Apple Pay, Android Pay, etc…
2. **xMoney** – this is the alternative primary payment gateway and enables acceptance of a wide variety of Cryptocurrencies.
3. **Bank Transfer / Wire Transfer** – this manual payment gateway is only enabled for larger transaction amounts such as cars and real-estate.

  1.
###
#### **Unsupported Countries**

As the xMag platform provides delivery of physical products, the supported jurisdiction of these third-party delivery services will be dependent and governed by its own terms of service.

xMag are not responsible for shipping and that remains the sole responsibility of the underlying vendor that has listed the product for sale.

Additionally, it is upon designated third-party providers which xMag may have integrated into, to determine its own support and acceptance for certain countries. xMag cannot guarantee all countries are supported for all its platform functionalities as each third-party provider has the right to reject certain jurisdictions based on their own Terms of Service.

Further information can be found by reading through individual third-party's Terms of Service.

1.
### DETAILED TECHNICAL DESIGN

  1.
###
#### **Technology Architecture**

There are 2 main components of the xMag technology architecture, as outlined below.

    1.
#### Web2 E-Commerce Platform App

The Web2 e-commerce core will exist for at very least up until v2, possibly even v3. Currently the Web3 technology is not efficient or cost effective enough for a seemingly centralized platform such as xMag to be fully on Web3.

**The v1 stack is as follows:**

- Presentation Layer: Mix of HTML/ CSS / JavaScript
- Content Management System: WordPress
- Main Plugins: WooCommerce, Dokan
- Language: PHP
- Database: MySQL

**The v2 stack is proposed as follows:**

- SaaS Platform: Shopify
- Multi-vendor Marketplace App: {TBC}
- Strategy: Leverage Infrastructure as a Service for Web2 portion to focus on Web3 integrations

    1.
#### Web3 Integrations

The Web3 integrations is the core focus of xMag. As the percentage of Web3 increase over the growth of the platform, more emphasis and effort is put into Web3-first concepts to ensure xMag is at the fore-front of defining a Web3-first e-commerce world.

- Presentation Layer: React / Other Modern Technologies
- Blockchain Layer: MultiversX, Ethereum, eventually chain-agnostic
- Bridging Technologies: Various open-source Web2 technologies

  1.
###
#### **Payments**

The payment methods have been covered in-depth in [this section](#_Payment_Methods).

    1.
#### CURRENCY CALCULATION

All payments are pegged to USD, regardless of which currency the payment is being processed in. Due to the volatility of cryptocurrencies, the payment gateways utilized must:

1. Retrieve the cryptocurrency price in USD at the time of payment, in real-time, from a reputable exchange with high liquidity (responsibility of the 3rd party payment gateway)
2. Have appropriate time-out mechanism in place to ensure new price is retrieved (e.g., 30 seconds) if a delay in signing the payment occurs

    1.
#### PAYMENT TERMS

The following terms and logic will apply for all payments processed through xMag:

1. All fees are non-refundable unless otherwise stated
2. The manual payment gateways (e.g., wired transfers) are only available for products and services that meet specific pre-determined conditions

  1.
###
#### **Alerts and Notifications**

    1.
#### METHODS

The following methods are used for delivery of alerts and notifications related to xMag:

- Primary: Email
- Fallback: SMS (if phone number is present – possibly future-state)
- Fallback: Push Notification (future-state when app is available)

    1.
#### TRIGGERs

The following are primary triggers alert and notification events within the xMag system:

- **Sign-up / Welcome Email** : Both for vendor and customer, upon successful sign-up
- **Password Retrieval / Username Retrieval** : Forgot password and similar functionalities
- **Purchase** : Both the vendor and the customer gets an email when a purchase is made, although these emails will be slightly different
- **Dispatch** : Successful dispatch of items / goods
- **Refund / Exchange** : Notification of order refund or exchange
- **Extra** : Additional non-core triggers such as cashback earnt, status achieved, will also be implemented as new features come to life

  1.
###
#### **Error Reporting**

The intricacies with error reporting are quite vast and will require a separate analysis to ensure fine-grain important details are captured.

Some of the areas and data to consider as follows:

- Failed attempts to sign-up and/or login
- Failed attempts to retrieve password
- Failed attempts at payment and the reasons
- Irregular and / or negative / fraudulent user behavior on the platform
- Technical errors when performing normal operations and invoking features on the platform
- API errors with 3rd party integrations or Web3 integrations
- Time-outs occurred and any performance issues
- Caching and refresh issues
- Vendor store management issues
- Attempts to bypass the platform ordering system
- User interface bugs and issues

  1.
###
#### **Performance**

The performance of the xMag platform is integral in ensuring optimal user experience and e-commerce conversion. The frequent bottleneck areas to pay attention to are:

- Page loading time
- Compatibility for different browsers, devices, and screen sizes
- [Notification and Alert](#_Alerts_and_Notifications) latency
- Payment gateway processing speed
- Web3 integration performance and response times

The general guidelines on performance are:

- Each operation should not take more than 3-5 seconds to perform (e.g., no more than 3-5 seconds of waiting time)
- For actions such as payments that need longer to confirm, this needs to be clearly stated on the user interface, preferably with a progress indicator to show real-time progress
- For all actions, especially those that take more than 3-seconds to perform, a spinner animation is vitally necessary to ensure user is aware the system is in the processing step and will psychologically buy a few more seconds

  1.
###
#### **Approval Process for Vendors**

As illustrated in the [high level diagram](#_High_Level_Diagram), there is an approval process that needs to be completed in order for vendors to be able to list items for sale.

The criteria is as below:

- KYB / KYC
- Store details have been sufficiently filled out, such as imagery, name, address
- Legal documents have been completed, such as Delivery Policy, Refund Policy and any additional Terms of Service beyond the generic one provided on xMag

  1.
###
#### **Security**

Security is paramount for the xMag platform as it is dealing with payment transactions both in Web2 and Web3.

xMag will ensure that:

- Card and any other forms of payments and compliance are passed onto a highly compliant, reputable third-party provider for processing and xMag will not retain any card or other sensitive customer information in its systems
- On-chain transactions (when available) are transparent and as secure as the blockchain protocol it is on
- KYC, KYB and any third-party provider / integrations have separate governance, which can be viewed on its respective website(s)

Further security information can be provided upon request.

  1.
###
#### **In-Platform Currency (Codename $XMGC)**

As previously mentioned, there are multiple merits for planning and executing a long-term in-platform currency. This will increase engagement, enable gamification, and ensure there's a beneficial self-sustainable ecosystem around xMag which will also ultimate become financially beneficial for itself.

Some high-level proposals on how this can be implemented (a detailed Tokenomics document will be required at a later stage):

- The currency will be in the form of a cryptocurrency token, most likely (but not necessarily) an ESDT
- There will be **no** staking rewards associated with the xMag currency as it is meant to be spent and not held
- The currency needs to have high through-put and very low fees (why MultiversX may be likely to be the best-fit blockchain of choice)
- Regular buy-back of tokens based on a percentage of the xMag's overall revenue to then distribute as rewards
- Token should be traded freely and on the DEFI exchanges and open markets
- Acquisitions of the token is fully redeemable on the xMag platform (via WalletConnect, Web3 login or similar functionalities in the future)
- Clear and transparent distribution schedule with organic market to determine its ultimate value
- Web2 accounts will also be able to hold $XMGC in a hybrid, custodied way (needs more exploration, Web2.5 wallet)

  1.
###
#### **Loyalty Gamification and Status**

As outlined in the [business model section](#_Cashback_Incentive_for), loyalty status coupled with some sort of cashback system is a good way to market and drive adoption.

The technical design of this loyalty status system will be as follows:

- The status will be split independently into 2, a customer loyalty status (prefixed by C-) and a vendor loyalty status (prefixed by V-)
- A user on the xMag system can independently achieve either or, or both, on the same account, as a vendor can also be a customer, a customer can also be a vendor (until such time the system technically changes this)
- The tiered system operates similarly to the airline status and will depend heavily on the activity and contribution to the xMag's greater ecosystem

    1.
#### Customer Loyalty Status

The following table proposes the different tiers and its associated benefits.

The "Gold" status can be fast-tracked via a "membership subscription" model, which paves the to give customers generous benefits without a big spend.

| **Tier** | **Benefits** |
| --- | --- |
| **C-Platinum** |
- Criteria (1-Year): Achieve $250,000 USD worth of purchases
- All benefits in Diamond
- 1% Cashback in $XMGC on all purchases
- Dedicated Account Manager
- Validity: 3-Years from date of achievement
 |
| **C-Diamond** |
- Criteria (1-Year): Achieve $90,000 USD worth of purchases
- All benefits in Gold
- 0.7% Cashback in $XMGC on all purchases
- Priority Support
- Validity: 2-Years from date of achievement
 |
| **C-Gold
 (Membership Fast-tract Subscription)** |
- Criteria (1-Year): Achieve $40,000 USD worth of purchases
- All benefits in Silver
- 0.5% Cashback in $XMGC on all purchases
- Free KYC – Sec Identify Pass (or free renewal)
- Validity: 2-Years from date of achievement, or if membership subscription is active
 |
| **C-Silver** |
- Criteria (1-Year): Achieve $15,000 USD worth of purchases
- All benefits in Bronze
- 0.3% Cashback in $XMGC on all purchases
- Validity: 365 Days from date of achievement
 |
| **C-Bronze** |
- Criteria (1-Year): Achieve $5000 USD worth of purchases
- All benefits in Jade
- 0.1% Cashback in $XMGC on all purchases
- Validity: 365 Days from date of achievement
 |
| **C-Jade** |
- Start of the journey
- Automatic Enrolment
- Corresponding SFT sent to associated wallet address to resemble status and associated benefit
- Validity: Unlimited
 |

    1.
#### Vendor Loyalty Status

The following table proposes the different tiers and its associated benefits:

| **Tier** | **Benefits** |
| --- | --- |
| **V-Platinum** |
- Criteria (1-Year): Achieve $750,000 USD worth of sales
- All benefits in V-Diamond
- 10% of fees (5%) rebated in $XMGC on all sales
- Dedicated Account Manager
- Validity: 3-Years from date of achievement
 |
| **V-Diamond** |
- Criteria (1-Year): Achieve $250,000 USD worth of sales
- All benefits in V-Gold
- 7% of fees (5%) rebated in $XMGC on all sales
- Priority Support
- Validity: 2-Years from date of achievement
 |
| **V-Gold** |
- Criteria (1-Year): Achieve $60,000 USD worth of sales
- All benefits in V-Silver
- 5% of fees (5%) rebated in $XMGC on all sales
- Free KYB – On-chain Pass (or free renewal)
- Validity: 2-Years from date of achievement, or if membership subscription is active
 |
| **V-Silver** |
- Criteria (1-Year): Achieve $25,000 USD worth of sales
- All benefits in V-Bronze
- 3% of fees (5%) rebated in $XMGC on all sales
- Validity: 365 Days from date of achievement
 |
| **V-Bronze** |
- Criteria (1-Year): Achieve $10,000 USD worth of sales
- All benefits in V-Jade
- 1% of fees (5%) rebated in $XMGC on all sales
- Validity: 365 Days from date of achievement
 |
| **V-Jade** |
- Start of the journey
- Automatic Enrolment
- Corresponding SFT sent to associated wallet address to resemble status and associated benefit
- Validity: Unlimited
 |

1.
### COMPLIANCE AND RISKS

  1.
###
#### **Jurisdictions**

As mentioned in the [unsupported countries section](#_Unsupported_Countries_and), each jurisdiction may have its own regulatory compliance and laws which need to be met. Although this task has been largely delegated to the third-party providers for shipping, payments and other required external functionalities, there is still disclosure duty with xMag to notify its users of these provisions.

A detailed terms and conditions of use of xMag must cover this with relevant disclaimer in place.

###

  1.
###
#### **Compromised Wallets**

When dealing with compromised wallets, it is up to the user with connected wallets to ensure their wallets are secure at all times.

xMag may use a variety of ways to detect and notify the user that their wallet has been compromised, however it remains at the sole responsibility of the user to keep their own wallets safe and away from malicious parties trying to gain access.

  1.
###
#### **Legal Action**

xMag is a platform that facilitates and connects relevant products and services from vendors to prospect customers. Although xMag makes the best effort to ensure its platform is a safe environment, the onus is ultimate upon its vendors and customers to complete sales and obligations in a compliant manner.

To ensure the customers are protected, xMag enforces all vendors to stay compliant by ensuring it has adequate legal documentation in place for its respective stores. As xMag scales, measures for vendors and customers will become more stringent to ensure the platform is a safe marketplace for all.

1.
### FUTURE SCOPE

  1.
###
#### **NFT / SFT Sales and Marketplace**

Although not in the initial launch, the facilitation of NFT/SFT sales and marketplace should be one of the primary attractions to help bridge Web2 to Web3. Although there are some significant compliance and regulatory risks in different jurisdictions currently, it is set to mature with clarity in the near future which paves the way for mainstream adoption.

As xMag's vision is to be the one-stop-shop for everything, facilitating the sale and trade of digital assets should also be a big category within its platform.

###

  1.
###
#### **Gateway of Tokenization for Everyone**

xMag can be the segway to bridge to Web3 from Web2 by providing a tailored, packaged service for tokenizing any products or services that one wishes to sell.

At xMag, we believe this is the future. Although still blurry, this is merely a byproduct of thinking ahead, innovating, defining, and being part of the first into this uncharted territory of Web3-first e-commerce.

  1.
###
#### **Web3 KYB Integrations**

As xMag integrates into on-chain KYC for its customers, a KYB integration must also be considered for its vendors. This ensures that vendors stay compliant and are identified in case there is any fraudulent or foul-play suspected or reported by other users.

  1.
###
#### **ESG Scores Integration for Vendors**

As ESG is at the fore-front of the world for the foreseeable future, xMag needs to responsibly integrate crucial data to drive and align global ESG initiatives.

Keeping track of an index or score for every single vendor is the first step in the right direction. Further integration can occur to intertwine ESG scores with [loyalty status](#_Vendor_Loyalty_Status) for optimal impact.

  1.
###
#### **Dedicated iOS and Android App**

A dedicated mobile app ensures that shopping experience can be optimal for the customers on the go. Native push notifications, location services and experiences can entice customers to even shop on the go effectively without fiddling with the mobile browser which can be sub-optimal.

In the future, vendors should also have a dedicated app to help them manage their e-commerce business on-the-go. Whether it would be a tablet or a smaller mobile phone device, xMag's platform should sync and adapt to all its users.

1