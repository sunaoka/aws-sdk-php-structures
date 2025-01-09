<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property string $region
 * @property string $resourceId
 * @property bool $isSuppressed
 * @property list<string> $metadata
 */
class TrustedAdvisorResourceDetail extends Shape
{
    /**
     * @param array{
     *     status: string,
     *     region?: string,
     *     resourceId: string,
     *     isSuppressed?: bool,
     *     metadata: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
