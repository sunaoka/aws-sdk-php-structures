<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SigningEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED' $Status
 * @property list<string> $Tokens
 * @property 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2' $SigningAttributesOrigin
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT' $NextSigningKeyLength
 * @property 'RSA_1024_BIT'|'RSA_2048_BIT' $CurrentSigningKeyLength
 * @property \Aws\Api\DateTimeResult $LastKeyGenerationTimestamp
 */
class DkimAttributes extends Shape
{
    /**
     * @param array{
     *     SigningEnabled?: bool,
     *     Status?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED',
     *     Tokens?: list<string>,
     *     SigningAttributesOrigin?: 'AWS_SES'|'EXTERNAL'|'AWS_SES_AF_SOUTH_1'|'AWS_SES_EU_NORTH_1'|'AWS_SES_AP_SOUTH_1'|'AWS_SES_EU_WEST_3'|'AWS_SES_EU_WEST_2'|'AWS_SES_EU_SOUTH_1'|'AWS_SES_EU_WEST_1'|'AWS_SES_AP_NORTHEAST_3'|'AWS_SES_AP_NORTHEAST_2'|'AWS_SES_ME_SOUTH_1'|'AWS_SES_AP_NORTHEAST_1'|'AWS_SES_IL_CENTRAL_1'|'AWS_SES_SA_EAST_1'|'AWS_SES_CA_CENTRAL_1'|'AWS_SES_AP_SOUTHEAST_1'|'AWS_SES_AP_SOUTHEAST_2'|'AWS_SES_AP_SOUTHEAST_3'|'AWS_SES_EU_CENTRAL_1'|'AWS_SES_US_EAST_1'|'AWS_SES_US_EAST_2'|'AWS_SES_US_WEST_1'|'AWS_SES_US_WEST_2',
     *     NextSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT',
     *     CurrentSigningKeyLength?: 'RSA_1024_BIT'|'RSA_2048_BIT',
     *     LastKeyGenerationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
