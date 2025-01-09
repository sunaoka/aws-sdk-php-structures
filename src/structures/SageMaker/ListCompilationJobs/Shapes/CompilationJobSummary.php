<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCompilationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompilationJobName
 * @property string $CompilationJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompilationStartTime
 * @property \Aws\Api\DateTimeResult $CompilationEndTime
 * @property 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus' $CompilationTargetDevice
 * @property 'ANDROID'|'LINUX' $CompilationTargetPlatformOs
 * @property 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF' $CompilationTargetPlatformArch
 * @property 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA' $CompilationTargetPlatformAccelerator
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $CompilationJobStatus
 */
class CompilationJobSummary extends Shape
{
    /**
     * @param array{
     *     CompilationJobName: string,
     *     CompilationJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CompilationStartTime?: \Aws\Api\DateTimeResult,
     *     CompilationEndTime?: \Aws\Api\DateTimeResult,
     *     CompilationTargetDevice?: 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus',
     *     CompilationTargetPlatformOs?: 'ANDROID'|'LINUX',
     *     CompilationTargetPlatformArch?: 'X86_64'|'X86'|'ARM64'|'ARM_EABI'|'ARM_EABIHF',
     *     CompilationTargetPlatformAccelerator?: 'INTEL_GRAPHICS'|'MALI'|'NVIDIA'|'NNA',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     CompilationJobStatus: 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
