<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string $payloadUrl
 * @property string $secret
 * @property string $branchFilter
 * @property list<list<WebhookFilter>> $filterGroups
 * @property 'BUILD'|'BUILD_BATCH' $buildType
 * @property bool $manualCreation
 * @property \Aws\Api\DateTimeResult $lastModifiedSecret
 * @property ScopeConfiguration $scopeConfiguration
 */
class Webhook extends Shape
{
    /**
     * @param array{
     *     url?: string,
     *     payloadUrl?: string,
     *     secret?: string,
     *     branchFilter?: string,
     *     filterGroups?: list<list<WebhookFilter>>,
     *     buildType?: 'BUILD'|'BUILD_BATCH',
     *     manualCreation?: bool,
     *     lastModifiedSecret?: \Aws\Api\DateTimeResult,
     *     scopeConfiguration?: ScopeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
