<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2'|'AWS_SES_ME_CENTRAL_1'|'AWS_SES_AP_SOUTH_2'|'AWS_SES_EU_CENTRAL_2'|'AWS_SES_AP_SOUTHEAST_5'|'AWS_SES_CA_WEST_1' $SigningAttributesOrigin
 * @property Shapes\DkimSigningAttributes|null $SigningAttributes
 */
class PutEmailIdentityDkimSigningAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     SigningAttributesOrigin: 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2'|'AWS_SES_ME_CENTRAL_1'|'AWS_SES_AP_SOUTH_2'|'AWS_SES_EU_CENTRAL_2'|'AWS_SES_AP_SOUTHEAST_5'|'AWS_SES_CA_WEST_1',
     *     SigningAttributes?: Shapes\DkimSigningAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
