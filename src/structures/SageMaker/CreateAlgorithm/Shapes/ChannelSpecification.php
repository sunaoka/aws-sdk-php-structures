<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property bool $IsRequired
 * @property list<string> $SupportedContentTypes
 * @property list<'None'|'Gzip'> $SupportedCompressionTypes
 * @property list<'Pipe'|'File'|'FastFile'> $SupportedInputModes
 */
class ChannelSpecification extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     IsRequired?: bool,
     *     SupportedContentTypes: list<string>,
     *     SupportedCompressionTypes?: list<'None'|'Gzip'>,
     *     SupportedInputModes: list<'Pipe'|'File'|'FastFile'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
