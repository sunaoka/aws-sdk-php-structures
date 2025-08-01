<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $findingArn
 * @property CisaData|null $cisaData
 * @property int|null $riskScore
 * @property list<Evidence>|null $evidences
 * @property list<string>|null $ttps
 * @property list<string>|null $tools
 * @property ExploitObserved|null $exploitObserved
 * @property list<string>|null $referenceUrls
 * @property list<string>|null $cwes
 * @property double|null $epssScore
 */
class FindingDetail extends Shape
{
    /**
     * @param array{
     *     findingArn?: string|null,
     *     cisaData?: CisaData|null,
     *     riskScore?: int|null,
     *     evidences?: list<Evidence>|null,
     *     ttps?: list<string>|null,
     *     tools?: list<string>|null,
     *     exploitObserved?: ExploitObserved|null,
     *     referenceUrls?: list<string>|null,
     *     cwes?: list<string>|null,
     *     epssScore?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
