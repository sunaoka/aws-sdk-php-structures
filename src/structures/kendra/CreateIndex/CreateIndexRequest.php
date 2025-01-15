<?php

namespace Sunaoka\Aws\Structures\kendra\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION'|null $Edition
 * @property string $RoleArn
 * @property Shapes\ServerSideEncryptionConfiguration|null $ServerSideEncryptionConfiguration
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\UserTokenConfiguration>|null $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN'|null $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration|null $UserGroupResolutionConfiguration
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Edition?: 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION'|null,
     *     RoleArn: string,
     *     ServerSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UserTokenConfigurations?: list<Shapes\UserTokenConfiguration>|null,
     *     UserContextPolicy?: 'ATTRIBUTE_FILTER'|'USER_TOKEN'|null,
     *     UserGroupResolutionConfiguration?: Shapes\UserGroupResolutionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
