<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property string|null $region
 * @property string $resourceId
 * @property bool|null $isSuppressed
 * @property list<string> $metadata
 */
class TrustedAdvisorResourceDetail extends Shape
{
    /**
     * @param array{
     *     status: string,
     *     region?: string|null,
     *     resourceId: string,
     *     isSuppressed?: bool|null,
     *     metadata: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
