<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SigningEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $Status
 * @property list<string>|null $Tokens
 * @property 'AWS_SES'|'EXTERNAL'|null $SigningAttributesOrigin
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
     *     SigningAttributesOrigin?: 'AWS_SES'|'EXTERNAL'|null,
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
