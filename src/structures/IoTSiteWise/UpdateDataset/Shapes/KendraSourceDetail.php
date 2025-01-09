<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseArn
 * @property string $roleArn
 */
class KendraSourceDetail extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
