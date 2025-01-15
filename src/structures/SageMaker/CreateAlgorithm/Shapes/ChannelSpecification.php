<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property bool|null $IsRequired
 * @property list<string> $SupportedContentTypes
 * @property list<'None'|'Gzip'>|null $SupportedCompressionTypes
 * @property list<'Pipe'|'File'|'FastFile'> $SupportedInputModes
 */
class ChannelSpecification extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     IsRequired?: bool|null,
     *     SupportedContentTypes: list<string>,
     *     SupportedCompressionTypes?: list<'None'|'Gzip'>|null,
     *     SupportedInputModes: list<'Pipe'|'File'|'FastFile'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
