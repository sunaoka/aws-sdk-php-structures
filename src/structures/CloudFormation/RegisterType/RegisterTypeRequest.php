<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $SchemaHandlerPackage
 * @property Shapes\LoggingConfig $LoggingConfig
 * @property string $ExecutionRoleArn
 * @property string $ClientRequestToken
 */
class RegisterTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName: string,
     *     SchemaHandlerPackage: string,
     *     LoggingConfig?: Shapes\LoggingConfig,
     *     ExecutionRoleArn?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
