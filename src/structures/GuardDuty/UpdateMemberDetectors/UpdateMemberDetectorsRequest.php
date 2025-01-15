<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $AccountIds
 * @property Shapes\DataSourceConfigurations|null $DataSources
 * @property list<Shapes\MemberFeaturesConfiguration>|null $Features
 */
class UpdateMemberDetectorsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AccountIds: list<string>,
     *     DataSources?: Shapes\DataSourceConfigurations|null,
     *     Features?: list<Shapes\MemberFeaturesConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
