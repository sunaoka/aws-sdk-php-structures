<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property list<string>|null $Arns
 * @property 'PUBLIC'|'PRIVATE'|'SHARED'|null $Type
 * @property string|null $NextToken
 * @property int<0, 25>|null $MaxResults
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     Arns?: list<string>|null,
     *     Type?: 'PUBLIC'|'PRIVATE'|'SHARED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
