<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmexCardSecurityCodeVersion1 $AmexCardSecurityCodeVersion1
 * @property AmexCardSecurityCodeVersion2 $AmexCardSecurityCodeVersion2
 * @property CardVerificationValue1 $CardVerificationValue1
 * @property CardVerificationValue2 $CardVerificationValue2
 * @property CardHolderVerificationValue $CardHolderVerificationValue
 * @property DynamicCardVerificationCode $DynamicCardVerificationCode
 * @property DynamicCardVerificationValue $DynamicCardVerificationValue
 * @property DiscoverDynamicCardVerificationCode $DiscoverDynamicCardVerificationCode
 */
class CardVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     AmexCardSecurityCodeVersion1?: AmexCardSecurityCodeVersion1,
     *     AmexCardSecurityCodeVersion2?: AmexCardSecurityCodeVersion2,
     *     CardVerificationValue1?: CardVerificationValue1,
     *     CardVerificationValue2?: CardVerificationValue2,
     *     CardHolderVerificationValue?: CardHolderVerificationValue,
     *     DynamicCardVerificationCode?: DynamicCardVerificationCode,
     *     DynamicCardVerificationValue?: DynamicCardVerificationValue,
     *     DiscoverDynamicCardVerificationCode?: DiscoverDynamicCardVerificationCode
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
