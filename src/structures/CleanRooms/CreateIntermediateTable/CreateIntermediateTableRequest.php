<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string|null $description
 * @property Shapes\PopulationAnalysisConfiguration $populationAnalysisConfiguration
 * @property string|null $kmsKeyArn
 * @property int<1, 365>|null $retentionInDays
 * @property array<string, string>|null $tags
 */
class CreateIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     populationAnalysisConfiguration: Shapes\PopulationAnalysisConfiguration,
     *     kmsKeyArn?: string|null,
     *     retentionInDays?: int<1, 365>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
