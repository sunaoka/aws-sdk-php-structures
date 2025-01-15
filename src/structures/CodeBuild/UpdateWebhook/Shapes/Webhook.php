<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $url
 * @property string|null $payloadUrl
 * @property string|null $secret
 * @property string|null $branchFilter
 * @property list<list<WebhookFilter>>|null $filterGroups
 * @property 'BUILD'|'BUILD_BATCH'|null $buildType
 * @property bool|null $manualCreation
 * @property \Aws\Api\DateTimeResult|null $lastModifiedSecret
 * @property ScopeConfiguration|null $scopeConfiguration
 */
class Webhook extends Shape
{
    /**
     * @param array{
     *     url?: string|null,
     *     payloadUrl?: string|null,
     *     secret?: string|null,
     *     branchFilter?: string|null,
     *     filterGroups?: list<list<WebhookFilter>>|null,
     *     buildType?: 'BUILD'|'BUILD_BATCH'|null,
     *     manualCreation?: bool|null,
     *     lastModifiedSecret?: \Aws\Api\DateTimeResult|null,
     *     scopeConfiguration?: ScopeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
