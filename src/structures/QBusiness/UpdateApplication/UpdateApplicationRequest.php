<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $identityCenterInstanceArn
 * @property string $displayName
 * @property string $description
 * @property string $roleArn
 * @property Shapes\AttachmentsConfiguration $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration $personalizationConfiguration
 * @property Shapes\AutoSubscriptionConfiguration $autoSubscriptionConfiguration
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     identityCenterInstanceArn?: string,
     *     displayName?: string,
     *     description?: string,
     *     roleArn?: string,
     *     attachmentsConfiguration?: Shapes\AttachmentsConfiguration,
     *     qAppsConfiguration?: Shapes\QAppsConfiguration,
     *     personalizationConfiguration?: Shapes\PersonalizationConfiguration,
     *     autoSubscriptionConfiguration?: Shapes\AutoSubscriptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
