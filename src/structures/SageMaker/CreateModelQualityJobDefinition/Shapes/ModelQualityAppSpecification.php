<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string>|null $ContainerEntrypoint
 * @property list<string>|null $ContainerArguments
 * @property string|null $RecordPreprocessorSourceUri
 * @property string|null $PostAnalyticsProcessorSourceUri
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 * @property array<string, string>|null $Environment
 */
class ModelQualityAppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>|null,
     *     ContainerArguments?: list<string>|null,
     *     RecordPreprocessorSourceUri?: string|null,
     *     PostAnalyticsProcessorSourceUri?: string|null,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'|null,
     *     Environment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
