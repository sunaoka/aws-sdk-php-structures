<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListDatasetLabelsRequest extends Request
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
