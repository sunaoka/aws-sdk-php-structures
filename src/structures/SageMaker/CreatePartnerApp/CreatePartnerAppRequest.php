<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler' $Type
 * @property string $ExecutionRoleArn
 * @property Shapes\PartnerAppMaintenanceConfig $MaintenanceConfig
 * @property string $Tier
 * @property Shapes\PartnerAppConfig $ApplicationConfig
 * @property 'IAM' $AuthType
 * @property bool $EnableIamSessionBasedIdentity
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreatePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler',
     *     ExecutionRoleArn: string,
     *     MaintenanceConfig?: Shapes\PartnerAppMaintenanceConfig,
     *     Tier: string,
     *     ApplicationConfig?: Shapes\PartnerAppConfig,
     *     AuthType: 'IAM',
     *     EnableIamSessionBasedIdentity?: bool,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
