<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property Shapes\InputChannel $inputChannel
 * @property string $name
 * @property int<1, 30> $retentionInDays
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class CreateMLInputChannelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredModelAlgorithmAssociations: list<string>,
     *     inputChannel: Shapes\InputChannel,
     *     name: string,
     *     retentionInDays: int<1, 30>,
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
