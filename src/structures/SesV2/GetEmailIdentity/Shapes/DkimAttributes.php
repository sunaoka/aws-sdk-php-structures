<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SigningEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $Status
 * @property list<string>|null $Tokens
 * @property string|null $SigningHostedZone
 * @property 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2'|'AWS_SES_ME_CENTRAL_1'|'AWS_SES_AP_SOUTH_2'|'AWS_SES_EU_CENTRAL_2'|'AWS_SES_AP_SOUTHEAST_5'|'AWS_SES_CA_WEST_1'|null $SigningAttributesOrigin
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT'|null $NextSigningKeyLength
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT'|null $CurrentSigningKeyLength
 * @property \Aws\Api\DateTimeResult|null $LastKeyGenerationTimestamp
 */
class DkimAttributes extends Shape
{
    /**
     * @param array{
     *     SigningEnabled?: bool|null,
     *     Status?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null,
     *     Tokens?: list<string>|null,
     *     SigningHostedZone?: string|null,
     *     SigningAttributesOrigin?: 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2'|'AWS_SES_ME_CENTRAL_1'|'AWS_SES_AP_SOUTH_2'|'AWS_SES_EU_CENTRAL_2'|'AWS_SES_AP_SOUTHEAST_5'|'AWS_SES_CA_WEST_1'|null,
     *     NextSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT'|null,
     *     CurrentSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT'|null,
     *     LastKeyGenerationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
