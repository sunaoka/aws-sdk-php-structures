<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string> $ContainerEntrypoint
 * @property list<string> $ContainerArguments
 * @property string $RecordPreprocessorSourceUri
 * @property string $PostAnalyticsProcessorSourceUri
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 * @property array<string, string> $Environment
 */
class ModelQualityAppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>,
     *     ContainerArguments?: list<string>,
     *     RecordPreprocessorSourceUri?: string,
     *     PostAnalyticsProcessorSourceUri?: string,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression',
     *     Environment?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
