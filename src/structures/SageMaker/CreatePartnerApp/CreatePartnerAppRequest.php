<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler' $Type
 * @property string $ExecutionRoleArn
 * @property string|null $KmsKeyId
 * @property Shapes\PartnerAppMaintenanceConfig|null $MaintenanceConfig
 * @property string $Tier
 * @property Shapes\PartnerAppConfig|null $ApplicationConfig
 * @property 'IAM' $AuthType
 * @property bool|null $EnableIamSessionBasedIdentity
 * @property bool|null $EnableAutoMinorVersionUpgrade
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler',
     *     ExecutionRoleArn: string,
     *     KmsKeyId?: string|null,
     *     MaintenanceConfig?: Shapes\PartnerAppMaintenanceConfig|null,
     *     Tier: string,
     *     ApplicationConfig?: Shapes\PartnerAppConfig|null,
     *     AuthType: 'IAM',
     *     EnableIamSessionBasedIdentity?: bool|null,
     *     EnableAutoMinorVersionUpgrade?: bool|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
