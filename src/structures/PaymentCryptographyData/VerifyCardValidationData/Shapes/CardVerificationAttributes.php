<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmexCardSecurityCodeVersion1|null $AmexCardSecurityCodeVersion1
 * @property AmexCardSecurityCodeVersion2|null $AmexCardSecurityCodeVersion2
 * @property CardVerificationValue1|null $CardVerificationValue1
 * @property CardVerificationValue2|null $CardVerificationValue2
 * @property CardHolderVerificationValue|null $CardHolderVerificationValue
 * @property DynamicCardVerificationCode|null $DynamicCardVerificationCode
 * @property DynamicCardVerificationValue|null $DynamicCardVerificationValue
 * @property DiscoverDynamicCardVerificationCode|null $DiscoverDynamicCardVerificationCode
 */
class CardVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     AmexCardSecurityCodeVersion1?: AmexCardSecurityCodeVersion1|null,
     *     AmexCardSecurityCodeVersion2?: AmexCardSecurityCodeVersion2|null,
     *     CardVerificationValue1?: CardVerificationValue1|null,
     *     CardVerificationValue2?: CardVerificationValue2|null,
     *     CardHolderVerificationValue?: CardHolderVerificationValue|null,
     *     DynamicCardVerificationCode?: DynamicCardVerificationCode|null,
     *     DynamicCardVerificationValue?: DynamicCardVerificationValue|null,
     *     DiscoverDynamicCardVerificationCode?: DiscoverDynamicCardVerificationCode|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
