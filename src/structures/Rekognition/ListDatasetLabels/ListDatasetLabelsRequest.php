<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDatasetLabelsRequest extends Request
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
