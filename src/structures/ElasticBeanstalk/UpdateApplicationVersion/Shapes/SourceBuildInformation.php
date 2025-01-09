<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Git'|'Zip' $SourceType
 * @property 'CodeCommit'|'S3' $SourceRepository
 * @property string $SourceLocation
 */
class SourceBuildInformation extends Shape
{
    /**
     * @param array{
     *     SourceType: 'Git'|'Zip',
     *     SourceRepository: 'CodeCommit'|'S3',
     *     SourceLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
