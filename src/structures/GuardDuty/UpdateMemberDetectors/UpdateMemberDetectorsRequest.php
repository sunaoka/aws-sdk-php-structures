<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $AccountIds
 * @property Shapes\DataSourceConfigurations $DataSources
 * @property list<Shapes\MemberFeaturesConfiguration> $Features
 */
class UpdateMemberDetectorsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds: list<string>,
     *     DataSources?: Shapes\DataSourceConfigurations,
     *     Features?: list<Shapes\MemberFeaturesConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
