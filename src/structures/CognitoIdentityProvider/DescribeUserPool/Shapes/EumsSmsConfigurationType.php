<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerArn
 * @property string|null $ExternalId
 * @property string|null $OriginationIdentity
 * @property string|null $ConfigurationSetName
 * @property string|null $InEntityId
 * @property string|null $InTemplateId
 * @property string|null $Region
 */
class EumsSmsConfigurationType extends Shape
{
    /**
     * @param array{
     *     CallerArn: string,
     *     ExternalId?: string|null,
     *     OriginationIdentity?: string|null,
     *     ConfigurationSetName?: string|null,
     *     InEntityId?: string|null,
     *     InTemplateId?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
