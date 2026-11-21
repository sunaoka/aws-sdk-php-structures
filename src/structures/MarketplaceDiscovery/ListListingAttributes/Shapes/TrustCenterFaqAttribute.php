<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $question
 * @property string $answer
 * @property string|null $subjectArea
 */
class TrustCenterFaqAttribute extends Shape
{
    /**
     * @param array{
     *     question: string,
     *     answer: string,
     *     subjectArea?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
