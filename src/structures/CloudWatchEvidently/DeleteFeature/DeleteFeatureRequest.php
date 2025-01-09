<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $feature
 * @property string $project
 */
class DeleteFeatureRequest extends Request
{
    /**
     * @param array{
     *     feature: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
