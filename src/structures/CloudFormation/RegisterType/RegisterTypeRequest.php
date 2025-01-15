<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string $TypeName
 * @property string $SchemaHandlerPackage
 * @property Shapes\LoggingConfig|null $LoggingConfig
 * @property string|null $ExecutionRoleArn
 * @property string|null $ClientRequestToken
 */
class RegisterTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName: string,
     *     SchemaHandlerPackage: string,
     *     LoggingConfig?: Shapes\LoggingConfig|null,
     *     ExecutionRoleArn?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
