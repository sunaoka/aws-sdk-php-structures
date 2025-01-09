<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CisaData $cisaData
 * @property list<string> $cwes
 * @property double $epssScore
 * @property list<Evidence> $evidences
 * @property ExploitObserved $exploitObserved
 * @property string $findingArn
 * @property list<string> $referenceUrls
 * @property int $riskScore
 * @property list<string> $tools
 * @property list<string> $ttps
 */
class FindingDetail extends Shape
{
    /**
     * @param array{
     *     cisaData?: CisaData,
     *     cwes?: list<string>,
     *     epssScore?: double,
     *     evidences?: list<Evidence>,
     *     exploitObserved?: ExploitObserved,
     *     findingArn?: string,
     *     referenceUrls?: list<string>,
     *     riskScore?: int,
     *     tools?: list<string>,
     *     ttps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
