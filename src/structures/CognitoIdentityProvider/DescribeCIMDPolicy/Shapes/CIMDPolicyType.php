<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeCIMDPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 * @property string|null $ClientId
 * @property string $PolicyName
 * @property int<86400, 31556952>|null $CacheDuration
 * @property list<string>|null $URLPatterns
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class CIMDPolicyType extends Shape
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CIMDPolicyId: string,
     *     ClientId?: string|null,
     *     PolicyName: string,
     *     CacheDuration?: int<86400, 31556952>|null,
     *     URLPatterns?: list<string>|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
