<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $membershipIdentifier
 * @property string $name
 * @property 'SQL' $format
 * @property Shapes\AnalysisSource $source
 * @property array<string, string> $tags
 * @property list<Shapes\AnalysisParameter> $analysisParameters
 */
class CreateAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     membershipIdentifier: string,
     *     name: string,
     *     format: 'SQL',
     *     source: Shapes\AnalysisSource,
     *     tags?: array<string, string>,
     *     analysisParameters?: list<Shapes\AnalysisParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
