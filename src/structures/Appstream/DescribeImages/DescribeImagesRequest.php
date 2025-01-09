<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property list<string> $Arns
 * @property 'PUBLIC'|'PRIVATE'|'SHARED' $Type
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     Arns?: list<string>,
     *     Type?: 'PUBLIC'|'PRIVATE'|'SHARED',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
