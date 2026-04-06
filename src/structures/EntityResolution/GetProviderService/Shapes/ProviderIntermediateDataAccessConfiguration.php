<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $awsAccountIds
 * @property list<string>|null $requiredBucketActions
 */
class ProviderIntermediateDataAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     awsAccountIds?: list<string>|null,
     *     requiredBucketActions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
