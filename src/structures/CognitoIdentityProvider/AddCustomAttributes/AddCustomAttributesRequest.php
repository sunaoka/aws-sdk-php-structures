<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddCustomAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property list<Shapes\SchemaAttributeType> $CustomAttributes
 */
class AddCustomAttributesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CustomAttributes: list<Shapes\SchemaAttributeType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
