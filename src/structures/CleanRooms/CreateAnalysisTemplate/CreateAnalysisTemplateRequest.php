<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $membershipIdentifier
 * @property string $name
 * @property 'SQL'|'PYSPARK_1_0' $format
 * @property Shapes\AnalysisSource $source
 * @property array<string, string>|null $tags
 * @property list<Shapes\AnalysisParameter>|null $analysisParameters
 * @property Shapes\AnalysisSchema|null $schema
 */
class CreateAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     membershipIdentifier: string,
     *     name: string,
     *     format: 'SQL'|'PYSPARK_1_0',
     *     source: Shapes\AnalysisSource,
     *     tags?: array<string, string>|null,
     *     analysisParameters?: list<Shapes\AnalysisParameter>|null,
     *     schema?: Shapes\AnalysisSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
