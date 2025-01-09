<?php

namespace Sunaoka\Aws\Structures\PI\GetDimensionKeyDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string $Group
 * @property string $GroupIdentifier
 * @property list<string> $RequestedDimensions
 */
class GetDimensionKeyDetailsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     Group: string,
     *     GroupIdentifier: string,
     *     RequestedDimensions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
