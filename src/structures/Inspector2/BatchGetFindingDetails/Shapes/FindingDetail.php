<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CisaData|null $cisaData
 * @property list<string>|null $cwes
 * @property double|null $epssScore
 * @property list<Evidence>|null $evidences
 * @property ExploitObserved|null $exploitObserved
 * @property string|null $findingArn
 * @property list<string>|null $referenceUrls
 * @property int|null $riskScore
 * @property list<string>|null $tools
 * @property list<string>|null $ttps
 */
class FindingDetail extends Shape
{
    /**
     * @param array{
     *     cisaData?: CisaData|null,
     *     cwes?: list<string>|null,
     *     epssScore?: double|null,
     *     evidences?: list<Evidence>|null,
     *     exploitObserved?: ExploitObserved|null,
     *     findingArn?: string|null,
     *     referenceUrls?: list<string>|null,
     *     riskScore?: int|null,
     *     tools?: list<string>|null,
     *     ttps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
