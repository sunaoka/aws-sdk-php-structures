<?php

namespace Sunaoka\Aws\Structures\kendra\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION' $Edition
 * @property string $RoleArn
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property string $Description
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\UserTokenConfiguration> $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN' $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration $UserGroupResolutionConfiguration
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Edition?: 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION',
     *     RoleArn: string,
     *     ServerSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration,
     *     Description?: string,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     UserTokenConfigurations?: list<Shapes\UserTokenConfiguration>,
     *     UserContextPolicy?: 'ATTRIBUTE_FILTER'|'USER_TOKEN',
     *     UserGroupResolutionConfiguration?: Shapes\UserGroupResolutionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
