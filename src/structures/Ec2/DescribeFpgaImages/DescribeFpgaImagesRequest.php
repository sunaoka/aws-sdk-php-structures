<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $FpgaImageIds
 * @property list<string> $Owners
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 */
class DescribeFpgaImagesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     FpgaImageIds?: list<string>,
     *     Owners?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
