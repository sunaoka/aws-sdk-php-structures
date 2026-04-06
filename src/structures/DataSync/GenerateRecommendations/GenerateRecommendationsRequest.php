<?php

namespace Sunaoka\Aws\Structures\DataSync\GenerateRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property list<string> $ResourceIds
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 */
class GenerateRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     ResourceIds: list<string>,
     *     ResourceType: 'SVM'|'VOLUME'|'CLUSTER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
