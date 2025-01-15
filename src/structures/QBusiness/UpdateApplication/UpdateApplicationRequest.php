<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $identityCenterInstanceArn
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $roleArn
 * @property Shapes\AttachmentsConfiguration|null $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration|null $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration|null $personalizationConfiguration
 * @property Shapes\AutoSubscriptionConfiguration|null $autoSubscriptionConfiguration
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     identityCenterInstanceArn?: string|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     roleArn?: string|null,
     *     attachmentsConfiguration?: Shapes\AttachmentsConfiguration|null,
     *     qAppsConfiguration?: Shapes\QAppsConfiguration|null,
     *     personalizationConfiguration?: Shapes\PersonalizationConfiguration|null,
     *     autoSubscriptionConfiguration?: Shapes\AutoSubscriptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
