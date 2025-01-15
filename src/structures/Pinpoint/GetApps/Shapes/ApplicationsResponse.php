<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ApplicationResponse>|null $Item
 * @property string|null $NextToken
 */
class ApplicationsResponse extends Shape
{
    /**
     * @param array{
     *     Item?: list<ApplicationResponse>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
