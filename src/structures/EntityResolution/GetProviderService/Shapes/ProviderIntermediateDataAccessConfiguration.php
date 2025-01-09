<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $awsAccountIds
 * @property list<string> $requiredBucketActions
 */
class ProviderIntermediateDataAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     awsAccountIds?: list<string>,
     *     requiredBucketActions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
