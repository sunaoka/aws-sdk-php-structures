<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $FpgaImageIds
 * @property list<string>|null $Owners
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeFpgaImagesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FpgaImageIds?: list<string>|null,
     *     Owners?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
