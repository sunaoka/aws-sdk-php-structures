<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property Shapes\InputChannel $inputChannel
 * @property string $name
 * @property int $retentionInDays
 * @property string $description
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class CreateMLInputChannelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredModelAlgorithmAssociations: list<string>,
     *     inputChannel: Shapes\InputChannel,
     *     name: string,
     *     retentionInDays: int,
     *     description?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
