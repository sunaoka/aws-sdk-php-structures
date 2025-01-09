<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeThesaurus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 */
class DescribeThesaurusRequest extends Request
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
