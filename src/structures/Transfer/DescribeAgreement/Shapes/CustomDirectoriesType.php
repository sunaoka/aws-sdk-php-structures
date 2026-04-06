<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailedFilesDirectory
 * @property string $MdnFilesDirectory
 * @property string $PayloadFilesDirectory
 * @property string $StatusFilesDirectory
 * @property string $TemporaryFilesDirectory
 */
class CustomDirectoriesType extends Shape
{
    /**
     * @param array{
     *     FailedFilesDirectory: string,
     *     MdnFilesDirectory: string,
     *     PayloadFilesDirectory: string,
     *     StatusFilesDirectory: string,
     *     TemporaryFilesDirectory: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
