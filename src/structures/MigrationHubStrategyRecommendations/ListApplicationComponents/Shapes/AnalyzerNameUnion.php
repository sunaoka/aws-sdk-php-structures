<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DLL_ANALYZER'|'BYTECODE_ANALYZER'|null $binaryAnalyzerName
 * @property 'A2C_ANALYZER'|'REHOST_ANALYZER'|'EMP_PA_ANALYZER'|'DATABASE_ANALYZER'|'SCT_ANALYZER'|null $runTimeAnalyzerName
 * @property 'CSHARP_ANALYZER'|'JAVA_ANALYZER'|'BYTECODE_ANALYZER'|'PORTING_ASSISTANT'|null $sourceCodeAnalyzerName
 */
class AnalyzerNameUnion extends Shape
{
    /**
     * @param array{
     *     binaryAnalyzerName?: 'DLL_ANALYZER'|'BYTECODE_ANALYZER'|null,
     *     runTimeAnalyzerName?: 'A2C_ANALYZER'|'REHOST_ANALYZER'|'EMP_PA_ANALYZER'|'DATABASE_ANALYZER'|'SCT_ANALYZER'|null,
     *     sourceCodeAnalyzerName?: 'CSHARP_ANALYZER'|'JAVA_ANALYZER'|'BYTECODE_ANALYZER'|'PORTING_ASSISTANT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
