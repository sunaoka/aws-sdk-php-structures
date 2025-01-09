<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DLL_ANALYZER'|'BYTECODE_ANALYZER' $binaryAnalyzerName
 * @property 'A2C_ANALYZER'|'REHOST_ANALYZER'|'EMP_PA_ANALYZER'|'DATABASE_ANALYZER'|'SCT_ANALYZER' $runTimeAnalyzerName
 * @property 'CSHARP_ANALYZER'|'JAVA_ANALYZER'|'BYTECODE_ANALYZER'|'PORTING_ASSISTANT' $sourceCodeAnalyzerName
 */
class AnalyzerNameUnion extends Shape
{
    /**
     * @param array{
     *     binaryAnalyzerName?: 'DLL_ANALYZER'|'BYTECODE_ANALYZER',
     *     runTimeAnalyzerName?: 'A2C_ANALYZER'|'REHOST_ANALYZER'|'EMP_PA_ANALYZER'|'DATABASE_ANALYZER'|'SCT_ANALYZER',
     *     sourceCodeAnalyzerName?: 'CSHARP_ANALYZER'|'JAVA_ANALYZER'|'BYTECODE_ANALYZER'|'PORTING_ASSISTANT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
