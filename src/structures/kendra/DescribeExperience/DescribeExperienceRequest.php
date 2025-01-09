<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 */
class DescribeExperienceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
