<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'WARNING'|'CRITICAL'|'NODATA' $value
 * @property \Aws\Api\DateTimeResult|null $transitionedAt
 * @property ContributorSummary|null $contributorSummary
 * @property AlertStateData|null $data
 */
class AlertStateInfo extends Shape
{
    /**
     * @param array{
     *     value: 'OK'|'WARNING'|'CRITICAL'|'NODATA',
     *     transitionedAt?: \Aws\Api\DateTimeResult|null,
     *     contributorSummary?: ContributorSummary|null,
     *     data?: AlertStateData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
