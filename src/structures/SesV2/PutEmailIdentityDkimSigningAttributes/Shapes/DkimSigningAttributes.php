<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainSigningSelector
 * @property string $DomainSigningPrivateKey
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT' $NextSigningKeyLength
 * @property 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2' $DomainSigningAttributesOrigin
 */
class DkimSigningAttributes extends Shape
{
    /**
     * @param array{
     *     DomainSigningSelector?: string,
     *     DomainSigningPrivateKey?: string,
     *     NextSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT',
     *     DomainSigningAttributesOrigin?: 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
