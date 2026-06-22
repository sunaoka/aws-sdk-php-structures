<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateInstrumentationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Java'|'Python'|'Javascript' $Language
 * @property string|null $CodeUnit
 * @property string|null $ClassName
 * @property string|null $MethodName
 * @property string $FilePath
 * @property int<1, max>|null $LineNumber
 */
class CodeLocation extends Shape
{
    /**
     * @param array{
     *     Language: 'Java'|'Python'|'Javascript',
     *     CodeUnit?: string|null,
     *     ClassName?: string|null,
     *     MethodName?: string|null,
     *     FilePath: string,
     *     LineNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
