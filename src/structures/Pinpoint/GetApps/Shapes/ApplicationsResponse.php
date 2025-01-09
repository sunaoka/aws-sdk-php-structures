<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ApplicationResponse> $Item
 * @property string $NextToken
 */
class ApplicationsResponse extends Shape
{
    /**
     * @param array{
     *     Item?: list<ApplicationResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
