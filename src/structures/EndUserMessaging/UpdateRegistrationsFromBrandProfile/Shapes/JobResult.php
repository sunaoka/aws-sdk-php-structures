<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateRegistrationsFromBrandProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $resourceIdentifier
 */
class JobResult extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     resourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
